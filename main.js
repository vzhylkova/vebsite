let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    navbar.classList.remove('active');
}

console.log(jQuery().jquery);
//цей скрипт для меню «бургера»
$(document).on('click', '#menu-icon', function () {
 $('.nav-menu').toggleClass('active');
});
// Submit subscription form using Ajax
$('#subscription_form').on('submit', function (e) {
 e.preventDefault();
 var $form = $(this);
 $.ajax({
 type: 'POST',
 url: '/vebsite/subscription_ajax.php',
 data: $form.serialize()
 }).done(function () {
 $form[0].reset()
 alert('Thank you for the subscription!')
 }).fail(function () {
 alert('Something went wrong')
 });
});