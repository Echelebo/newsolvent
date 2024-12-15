(function(){document.addEventListener('DOMContentLoaded',addListeners,false)
function checkLength(){var text=this.value;var maxLength=this.getAttribute('maxLength');var bytesLength=byteLength(text);while(bytesLength>maxLength){text=text.slice(0,text.length-1);this.value=text
bytesLength=byteLength(text);}
var letterCounters=this.parentElement.getElementsByClassName('letters-counter')
letterCounters[0].textContent=maxLength-bytesLength;};function setTimeoutBeforeCheckLength(){input_fields=this.getElementsByClassName('charsleftinput')
setTimeout(function(){for(var i=0;i<input_fields.length;i++){checkLength.apply(input_fields[i]);}},0);}
function addResetListener(){var form=this.parentElement
while(form.tagName.toLowerCase()!='form'){form=form.parentElement}
form.addEventListener('reset',setTimeoutBeforeCheckLength,false);};function addListeners(){var input_fields=document.getElementsByClassName("charsleftinput")
for(var i=0;i<input_fields.length;i++){input_fields[i].addEventListener('input',checkLength,false);input_fields[i].addEventListener('change',checkLength,false);input_fields[i].addEventListener('input',addResetListener,{once:true});}};})();