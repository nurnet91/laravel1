if ($.fn.dataTableExt != undefined || $.fn.dataTableExt != null) {
    $.fn.dataTableExt.oApi.yangilash = function(oSettings) {
        if(oSettings.oFeatures.bServerSide === false){
            var before = oSettings._iDisplayStart;
            oSettings.oApi._fnReDraw(oSettings);
            oSettings._iDisplayStart = before;
            oSettings.oApi._fnCalculateEnd(oSettings);
        }
        oSettings.oApi._fnDraw(oSettings);
    };    
}
function distoryfn(t) {
	if (confirm("Rostdanam o’chirmoqchimisiz?")) {
    	$.ajax({
    		url: t.attr('action'),
    		type: t.attr('method'),
    		data: t.serialize(),
    		success: function(data) {
    			successfn(data, t);
    		}
    	});        		
	}
	return false;
}
function ajaxRequestWithConfirm(t, text = "Ishonchingiz komilmi?") {
    if (confirm(text)) {
        return ajaxRequest(t);
    }
    return false;
}
function ajaxRequest(t) {
    $.ajax({
        url: t.attr('render'),
        type: 'get',
        success:function(data) {
            successfn(data, t);
        }
    });
    return false;
}
function successfn(data, t) {
    if (t.parents('table[role="grid"]').length > 0) {
        t.parents('table[role="grid"]').dataTable().yangilash();
    }
    if (t.prev('label.img-label').length > 0) {
        t.prev('label.img-label').find('img').attr('src', '/img/no-image.png');
        t.remove();
    }
    var gg = '';
    if (data.status == 'success') {
        gg = '<div class="alert alert-success">'+data.msg+' <a class="close" style="text-decoration: none;" data-dismiss="alert">×</a></div>';
    }
    else{
        gg = '<div class="alert alert-danger">'+data.msg+' <a class="close" style="text-decoration: none;" data-dismiss="alert">×</a></div>';
    }
    $('#messageContent').html(gg);
}
function getformatteddate(time, type = false) {
    var date = new Date(time);
    var newMonth = date.getMonth() + 1;
    var hour = date.getHours() < 10 ? '0' + date.getHours() : date.getHours();
    var minute = date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes();
    var day = date.getDate() < 10 ? '0' + date.getDate() : date.getDate();
    var month = newMonth < 10 ? '0' + newMonth : newMonth;
    var year = date.getFullYear();
    var t = type ? '<h4 style="margin:0;color:red;">' : '<h4 style="margin:0;">';
    return t+hour+':'+minute+'</h4><small>'+day+'.'+month+'.'+year+'</small>';
}
function getformattedurl(url) {
    return '<code>/'+url+'</code>';
}
function getfoto(foto) {
    var txt = '<div class="table-img">';
    if (foto == null || foto == '') {
        txt = txt + '<img src="/img/no-image.png"/>';
    }
    else{
        txt = txt + '<img src="/'+foto+'"/>';
    }
    txt = txt + '</div>';
    return txt;
}
function loadImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#LoadedImage').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
String.prototype.escapeHTML = function() {
    return this.replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
}
function htmlspecialchars_decode (string, quoteStyle) {
    var optTemp = 0;
    var i = 0;
    var noquotes = false;
    if (typeof quoteStyle === 'undefined') {
        quoteStyle = 2;
    }
    if (string == null || string == undefined) {
        string = '';
    }
    string = string.toString()
        .replace(/&lt;/g, '<')
        .replace(/&gt;/g, '>');
    var OPTS = {
        'ENT_NOQUOTES': 0,
        'ENT_HTML_QUOTE_SINGLE': 1,
        'ENT_HTML_QUOTE_DOUBLE': 2,
        'ENT_COMPAT': 2,
        'ENT_QUOTES': 3,
        'ENT_IGNORE': 4
    };
    if (quoteStyle === 0) {
        noquotes = true;
    }
    if (typeof quoteStyle !== 'number') {
        quoteStyle = [].concat(quoteStyle);
        for (i = 0; i < quoteStyle.length; i++) {
            if (OPTS[quoteStyle[i]] === 0) {
                noquotes = true;
            } 
            else if (OPTS[quoteStyle[i]]) {
                optTemp = optTemp | OPTS[quoteStyle[i]];
            }
        }
        quoteStyle = optTemp;
    }
    if (quoteStyle & OPTS.ENT_HTML_QUOTE_SINGLE) {
        string = string.replace(/&#0*39;/g, "'");
    }
    if (!noquotes) {
        string = string.replace(/&quot;/g, '"');
    }
    string = string.replace(/&amp;/g, '&');
    return string;
}
function getIcon(status) {
    return status == 1 ? '<i class="fa fa-check fa-lg"></i>' : '<i class="fa fa-close fa-lg"></i>';
}
function getStatusLink(status, id, action) {
    return '<div style="text-align:center;"><a style="cursor:pointer;" render="' + action + '/status/' + id + '" onclick="ajaxRequest($(this))">' + getIcon(status) + '</a></div>';
}
function getStatus(status) {
    return '<div style="text-align:center;">' + getIcon(status) + '</div>';
}

function changeDropDown(select) {
    console.log(select.val());
}