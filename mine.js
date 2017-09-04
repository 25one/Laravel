$(document).ready(function() {
$('body').on('click', '#save_id', function() {
var r=/^(\w+\.)*\w+@[-\w]+(\.[-\w]+)+$/i;
if(!r.test(document.forms[0].elements[3].value)) {
document.forms[0].elements[3].style.border="2px solid red";
document.forms[0].elements[3].setAttribute('onfocus', 'this.style.border="1px solid silver";');
error_validate.innerHTML='The email must be a valid email address';
error_validate.style.color='red';
}
else {
document.forms[0].elements[5].value='save';
document.forms[0].elements[5].type='submit';
}
});
});