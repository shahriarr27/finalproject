
// $('select').each(function(){
//   var $this = $(this), numberOfOptions = $(this).children('option').length;

//   $this.addClass('select-hidden'); 
//   $this.wrap('<div class="select"></div>');
//   $this.after('<div class="select-styled"></div>');

//   var $styledSelect = $this.next('div.select-styled');
//   $styledSelect.text($this.children('option').eq(0).text());

//   var $list = $('<ul />', {
//       'class': 'select-options'
//   }).insertAfter($styledSelect);

//   for (var i = 0; i < numberOfOptions; i++) {
//       $('<li />', {
//           text: $this.children('option').eq(i).text(),
//           rel: $this.children('option').eq(i).val()
//       }).appendTo($list);
//       //if ($this.children('option').eq(i).is(':selected')){
//       //  $('li[rel="' + $this.children('option').eq(i).val() + '"]').addClass('is-selected')
//       //}
//   }

//   var $listItems = $list.children('li');

//   $styledSelect.click(function(e) {
//       e.stopPropagation();
//       $('div.select-styled.active').not(this).each(function(){
//           $(this).removeClass('active').next('ul.select-options').hide();
//       });
//       $(this).toggleClass('active').next('ul.select-options').toggle();
//   });

//   $listItems.click(function(e) {
//       e.stopPropagation();
//       $styledSelect.text($(this).text()).removeClass('active');
//       $this.val($(this).attr('rel'));
//       $list.hide();
//       //console.log($this.val());
//   });

//   $(document).click(function() {
//       $styledSelect.removeClass('active');
//       $list.hide();
//   });

// });
var today = new Date();
var minDate = today.setDate(today.getDate() + 1);

$('#datePicker').datetimepicker({
  useCurrent: false,
  format: "MM/DD/YYYY",
  minDate: minDate
});

var firstOpen = true;
var time;

$('.timePicker').datetimepicker({
  useCurrent: false,
  format: "hh:mm A"
}).on('dp.show', function() {
  if(firstOpen) {
    time = moment().startOf('day');
    firstOpen = false;
  } else {
    time = "01:00 PM"
  }
  
  $(this).data('DateTimePicker').date(time);
});


/////////////dragable table
const slider = document.querySelector('.table-scroll');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  let rect = slider.getBoundingClientRect();
  isDown = true;
  slider.classList.add('active');
  // Get initial mouse position
  startX = e.pageX - rect.left;
  // Get initial scroll position in pixels from left
  scrollLeft = slider.scrollLeft;
  console.log(startX, scrollLeft);
});

slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.dataset.dragging = false;
  slider.classList.remove('active');
});

slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.dataset.dragging = false;
  slider.classList.remove('active');
});

slider.addEventListener('mousemove', (e) => {
  if (!isDown) return;
  let rect = slider.getBoundingClientRect();
  e.preventDefault();
  slider.dataset.dragging = true;
  // Get new mouse position
  const x = e.pageX - rect.left;
  // Get distance mouse has moved (new mouse position minus initial mouse position)
  const walk = (x - startX);
  // Update scroll position of slider from left (amount mouse has moved minus initial scroll position)
  slider.scrollLeft = scrollLeft - walk;
  console.log(x, walk, slider.scrollLeft);
});