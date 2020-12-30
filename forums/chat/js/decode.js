function decodeHtml(html) {
	var txt = document.createElement("textarea");
	txt.innerHTML = html;
	return txt.value;
}

function encodeHtml(str) {
    var div = document.createElement('div');
    div.appendChild(document.createTextNode(str));
    return div.innerHTML;
}
		var fixMessage = function() {
				var max_length = 140;
				if(chat_input.value.length > max_length || chat_input.value.indexOf('\r') >= 0 || chat_input.value.indexOf('\n') >= 0) {
					chat_input.value = chat_input.value.replace(/\n|\r/g, '').substring(0, max_length);
				}
		}