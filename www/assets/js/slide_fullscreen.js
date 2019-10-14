function slide_fullscreen() {
  jQuery(function ($) {
    $.supersized({
      // Functionality
      slide_interval: 8000,
      transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
      transition_speed: 1000,
      // Components
      slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
      progress_bar: 1,
      slides: [
        {
          image: 'http://placehold.it/1280x1024&text=Slide+1'
        },
        {
          image: 'http://placehold.it/1280x1024&text=Slide+2'
        }
      ]
    });
  });
}
window.onload = slide_fullscreen;
