var BigBrain = BigBrain || {};

(function() {
    var factor = 1.0;
    var cumulativefactor =  factor;

    var getCursorPosition = function(e) {
        var x;
        var y;
        if (e.pageX != undefined && e.pageY != undefined) {
            x = e.pageX;
            y = e.pageY;
        } else {
            x = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
            y = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
        }
        var xoffset = e.target.offsetLeft;
        var yoffset = e.target.offsetTop;
        var current = e.target.offsetParent;
        while(current) {
            xoffset += current.offsetLeft;
            yoffset += current.offsetTop;
            current = current.offsetParent;
        }
        x -= xoffset;
        y -= yoffset;
        BigBrain.target = e.target;
        return {target: e.target,x: x,y: y};
    };
    var initialHistory = window.history.length;
    var sliceCanvas;
    var slicectx;
    var selectorCanvas;
    var selectctx;
    var selectorImg;
    var selectWidth;
    var selectHeight;
    var numSlices = 7404; //total number of slices
    var inc; //slices per pixel
    var currentSlice;
    var drag = false;
    var sliceDrag = false;
    var sliceZoom = false;
    var lastDraw = new Date().getTime();
    var redraw = function(cSlice, sctx, sCanvas, force) {
        return function() {
            // Throttle how often this fires, just return if
            // we've drawn recently..
            var now = new Date().getTime();
            if(force !== true && ( (now - lastDraw) < 100)) {
                return;
            }
            if(cSlice !== currentSlice) {
                return;
            }
            if(cSlice.sliceId != currentSlice.sliceId || currentSlice.src != cSlice.src) {
                return;
            }
            // Reset the transformation matrix to the
            // identity matrix before drawing a rectangle
            // to clear the old image, then restore the
            // transformation matrix and draw the new one
            if(cSlice && sctx && sCanvas) {
                sctx.save();
                sctx.setTransform(1, 0, 0, 1, 0, 0);
                sctx.clearRect(0, 0, sCanvas.width, sCanvas.height);
                sctx.restore();
                // Refresh the time and make sure nothing's drawn in the interim,
                // if another setInterval call fired..
                now = new Date().getTime();
                if(lastDraw > now) {
                    return;
                }
                sctx.drawImage(cSlice,0,0, sCanvas.width, sCanvas.height);
                lastDraw = now;
            }
        }
    };
    function initSelector(img) {
        selectorCanvas.width = img.width;
        selectorCanvas.height = 434; //img.height;
        // force to be the same height as the histological slice
        selectWidth = img.width;
        selectHeight = 434; //img.height;
        console.log(selectorCanvas);
        selectctx = selectorCanvas.getContext('2d');
        selectctx.drawImage(img,0,0);
        inc = numSlices/selectWidth;


        $(selectorCanvas).mousedown(function(e) {
            if(sliceZoom || sliceDrag) {
                drag = false;
                return;
            }
            if(e.which == 1) {
                drag = true;
            }
        });
        $(selectorCanvas).mousemove(function(e) {
            if(drag) {
                var coord = getCursorPosition(e);
                selectFromCoord(coord.x);
            }
        });
        $(selectorCanvas).mouseup(function(e) {
            if(drag === false) {
                return;
            }
            var coord = getCursorPosition(e);
            selectFromCoord(coord.x);
            drag = false;
            var closure = function(cSlice, sctx, sCanvas) {
                return function(data) {
                    if(currentSlice !== cSlice || sctx !== slicectx || sliceCanvas !== sCanvas) {
                        return;
                    }
                    var load = document.getElementById("loading");
                    var bold = document.createElement('b');

                    //load.textContent = "Loading hi resolution image...";
                    load.innerHTML = "<b>Loading high-res image...</b>";
                    cSlice.onload = redraw(cSlice, slicectx, sliceCanvas, false);
                    cSlice.addEventListener('load', function() {
                        load.textContent = '';
                    });
                    cSlice.src = "AjaxHelper.php?Module=bigbrain&script=get_slice_full.php?sliceID=" + cSlice.sliceId;
                }
            };
            if(currentSlice.sliceId > 0 && currentSlice.sliceId <= numSlices) {
                $.get('/AjaxHelper.php?Module=bigbrain&script=get_slice_full.php', { sliceID: currentSlice.sliceId }, closure(currentSlice, slicectx, sliceCanvas));
            }
        });
        var oldpos = [];
        var pos = [];
        var mousemove= [0, 0];
        $(sliceCanvas).mousedown(function(e) {
//            console.log(e);
            if(e.which === 1) {
                sliceDrag = true;
                //console.log(e);
            } else if(e.which === 2) {
                sliceZoom = true;
            }
            pos = [e.pageX, e.pageY];
        });
        $(sliceCanvas).mousewheel(function(e, delta) {
            e.preventDefault();
            factor = 1.0 + (delta / 50);
	
	    scale = 1;
	    originx = 0 + sliceCanvas.height/2;
	    originy = 0 + sliceCanvas.width/2;
	    var mousex = e.clientX - sliceCanvas.offsetLeft;
            var mousey = e.clientY - sliceCanvas.offsetTop;
	    console.log("mouse x: " + mousex);
	    console.log("mouse y: " + mousey);
            var wheel = e.wheelDelta/120;//n or -n
	//    var zoom = Math.pow(1 + Math.abs(wheel)/2 , wheel > 0 ? 1 : -1);

    	    slicectx.translate(
        	originx,
        	originy
    		);

            cumulativefactor *= factor;
            slicectx.scale(factor, factor);
       //     slicectx.scale(zoom, zoom);

	    slicectx.translate (
		-( mousex / factor + originx - mousex / ( factor ) ),
        	-( mousey / factor + originy - mousey / (factor ) )
    	    );
    	    originx = ( mousex / factor + originx  );
     	    originy = ( mousey / factor + originy  );
    	//	scale *= factor;

            setInterval(redraw(currentSlice, slicectx, sliceCanvas, false), 100);
        });
        $(document).mousemove(function(e) {
            if(sliceDrag || sliceZoom) {
                oldpos = pos;
                pos = [e.pageX, e.pageY];
                mousemove[0] = pos[0] - oldpos[0];
                mousemove[1] = pos[1] - oldpos[1];
                if(sliceDrag) {
                    e.preventDefault();
                    if(cumulativefactor !== 0) {
                        slicectx.translate(mousemove[0] / cumulativefactor, mousemove[1] / cumulativefactor);
                    }
                    setInterval(redraw(currentSlice, slicectx, sliceCanvas, false), 100);
                    //redraw(currentSlice, slicectx, sliceCanvas, false); //, 100);
                } else if(sliceZoom) {
                    factor = 1.0 - (mousemove[1] / 400);
                    cumulativefactor *= factor;
                    //slicectx.translate(e.offsetX / cumulativefactor, e.offsetY / cumulativefactor);
                    slicectx.scale(factor, factor);
                    setInterval(redraw(currentSlice, slicectx, sliceCanvas, false), 100);
                    //redraw(currentSlice, slicectx, sliceCanvas, false); //, 100);
                }
            }
        });
        $(document).mouseup(function(e) {
            sliceDrag = false;
            sliceZoom = false;
        });
    };


 function initSlices(num) {
     sliceCanvas.width  = 500;
     sliceCanvas.height = 434;
     slicectx = sliceCanvas.getContext('2d');
     console.log(num);
     selectSlice(num || Math.floor(numSlices/2));
     $(sliceCanvas).mousedown(function(e) {
         if(e.which === 1) {
             sliceDrag = true;
         } else if(e.which === 2){
             sliceZoom = true;
         }
         pos = [e.pageX, e.pageY];
     });
 }
 BigBrain.init = function(selector,slice) {
     var match =  /\&slice=([1-9][0-9]*)/.exec(window.location.href);
     var num;
     if(match) {
         num = match[1];
     }

     //initialize selector
     selectorCanvas = selector;
     sliceCanvas = slice;
     selectorImg = new Image();
     selectorImg.src = "/images/bigbrain-sagital.png";
     selectorImg.onload = function() {
         initSelector(selectorImg);
         initSlices(num);
     };
 };
 function padNumber(num,length) {
     num = "" + num;
     while(num.length<length) {
         num = "0" + num;
     };

     return num;
 }

 function selectSlice(num) {
     if(num > numSlices) {
         num = numSlices;
     }
     if(num <= 0) {
         num = 1;
     }
     /* if((num>numSlices || num <= 0)){
         console.log("INVALID SLICE");
         return;
     }*/
     var x = num / inc;
     selectctx.fillStyle = "#FFFFFF";
     selectctx.fillRect(0,0,selectorCanvas.width,selectorCanvas.height);
     selectctx.drawImage(selectorImg,0,0);
     selectctx.fillStyle = "#FF9900";
     selectctx.fillRect(x,0,1,selectHeight);

     if(currentSlice && currentSlice.hires === true) {
         factor = 13.15;
         slicectx.scale(factor, factor);

     }

     currentSlice = new Image();
     currentSlice.sliceId = num;

     currentSlice.onload = function(img) {
         slicectx.drawImage(currentSlice,0,0);
         window.history.replaceState({},"",'\?test_name=bigbrain&slice='+num);
         BigBrain.afterSelectSlice(num);
     };

     //currentSlice.src = '/images/bigbrain-sagital.png';
     currentSlice.src = '/images/slices/pm' + padNumber(num,4) + 'o.png';
     currentSlice.hires = false;

 }

 function selectFromCoord(x) {
     var num = x*inc;
     selectSlice(Math.floor(num));
 }

 $(document).keydown(function(e) {
     console.log(e.keyCode);
     var curSlice = parseInt($(".sliceId").text(), 10);
     if(isNaN(curSlice)) {
         return;
     }
     if(e.keyCode === 65 || e.keyCode === 38) { // a, zoom in
            e.preventDefault();
            factor = 1.1;
            cumulativefactor *= factor;


            originx = 0 + sliceCanvas.height/2;
            originy = 0 + sliceCanvas.width/2;
            var zoomx = 520+250 - sliceCanvas.offsetLeft;
            var zoomy = 520+250 - sliceCanvas.offsetTop;

            slicectx.translate(
                originx,
                originy
                );

            slicectx.scale(factor, factor);

            slicectx.translate (
                -( zoomx / factor + originx - zoomx / ( factor ) ),
                -( zoomy / factor + originy - zoomy / (factor ) )
            );
            originx = ( zoomx / factor + originx  );
            originy = ( zoomy / factor + originy  );

            setInterval(redraw(currentSlice, slicectx, sliceCanvas, false), 100);
     } else if (e.keyCode === 90 || e.keyCode === 40) { // z, zoom out
            e.preventDefault();
            factor = 0.9;
            cumulativefactor *= factor;

            originx = 0 + sliceCanvas.height/2;
            originy = 0 + sliceCanvas.width/2;
            var zoomx = 520+250 - sliceCanvas.offsetLeft;
            var zoomy = 520+250 - sliceCanvas.offsetTop;

            slicectx.translate(
                originx,
                originy
                );


            slicectx.scale(factor, factor);

            slicectx.translate (
                -( zoomx / factor + originx - zoomx / ( factor ) ),
                -( zoomy / factor + originy - zoomy / (factor ) )
            );
            originx = ( zoomx / factor + originx  );
            originy = ( zoomy / factor + originy  );


            setInterval(redraw(currentSlice, slicectx, sliceCanvas, false), 100);
     }
     else if(e.keyCode === 37) { // left, prev slice
         if((curSlice - 1) >= 1) {
             window.location = "?test_name=bigbrain&slice=" + (curSlice - 1);
         } else {
             console.log(curSlice - 1);
             //window.location = "?test_name=bigbrain&slice=1";
         }
         // Left
     } else if(e.keyCode === 39) { // right, next slice
         if((curSlice + 1) <= numSlices) {
             window.location = "?test_name=bigbrain&slice=" + (curSlice + 1);
         } else {
         console.log(curSlice + 1);
         }
         // Right
     }
 });
 BigBrain.afterSelectSlice = function(num) {
     num = parseInt(num, 10);
     var nextSlice, prevSlice;
     var data = $("#sliceData");
     data.html(" <span style=\"font-weight: bold\"><a href=\"/AjaxHelper.php?Module=bigbrain&script=get_slice.php?sliceID=" + num + "\">Download histology MNC</a></span></br></br><span style=\"font-weight: bold\"><a href=\"/AjaxHelper.php?Module=bigbrain&script=get_slice_full.php?sliceID=" + num + "\">Download histology PNG</a></span>"); 

//     data = $("#sliceViewLink");
//     data.html("<span style=\"font-weight: bold\"><a href=\"/mri_browser.php?sessionID=" + num + "\">View in Imaging Browser</a></span>");
     var id = $(".sliceId").text(num);
     if(num < numSlices) {
         nextSlice = num + 1;
     } else {
         nextSlice = numSlices;
     }
     if(num > 1) {
         prevSlice = num - 1;
     } else {
         prevSlice = 1;
     }
//     $("#nextslice").attr("href", "?test_name=bigbrain&slice=" + nextSlice);
 //    $("#prevslice").attr("href", "?test_name=bigbrain&slice=" + prevSlice);
     $("#prevslice").click(function(e) { location.href =  "?test_name=bigbrain&slice=" + prevSlice;});
     $("#nextslice").click(function(e) { location.href =  "?test_name=bigbrain&slice=" + nextSlice;});

 };

})();
