# Riley Bathurst Wordpress Site

This is a messy project as I continue to build it out but it started as a Wordpress project built with [foundation](https://github.com/zurb/foundation-sites)

Except I then pulled that out, which is still a little messy so getting everything in place for those being pulled out

Except now some of the project is being build with webpack so that is held over at [riley-webpack](https://github.com/rileybathurst/riley-webpack) which is currently needing some love and I want to change a bunch of that

## Run the Sass
```% sass scss/app.scss css/app.css --watch```

## Gutenberg
Means I have less template pages to work on but also a little less flexibility with the grid?
I guess thats not true I could float certain sections to things and others not that could be pretty interesing.
This needs a sub grid which is annoying but maybe an interesting piece to work on?
I'll try it out quick on firefox.

### Fixes needed
- webpack build is all over the show and I think quite a lot can be remove
- lozad is loading from a cdn
- HTML formatting to make sure the H tag is the first one
- sort out the code block max-width
- comments page
- deal with some nice header tags so it's not relying on yoast
- wordpress max variable width
- can I start adding an chrome lazy load tags to images?
- I have some overly sized grids .article-search { grid-column: 2 / 12; // really?
- I also have a lot of grids I think I could simplify down
- I have a lot of the grid-template-columns: 2em 1fr 4fr 1fr 2em; is that because its right or because its easy?
- there are a lot of zeros in the styles are they overwritting stuff I have written, brower defaults, foundation stuff I can now remove?
- global border weight
- comments css
- specific bottom is running lozad which has been deleted and is also a mess
- http://localhost:8888/riley/category/design-2/ is a mess
- all the svg load every page that doesnt seem very smart or useful
- single-post-calendar-blackout-dates
- chk image sizes are a mess
- single-post-keep-squaw-true.php inline styles are ridiculous
- make captions real captions
- winter 18.php web p images
- img/photography.jpeg needs to be compressed to webp for the top of template-parts/featured-image
- nav buttons should have the fill slide between
- the top right svg should also open a menu
- make a tiny tiny media query thats super boring but works