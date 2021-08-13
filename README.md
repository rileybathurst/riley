# Riley Bathurst Wordpress Site

This is a messy project as I continue to build it out but it started as a Wordpress project built with [foundation](https://github.com/zurb/foundation-sites)

Except I then pulled that out, which is still a little messy so getting everything in place for those being pulled out

Except now some of the project is being build with webpack so that is held over at [riley-webpack](https://github.com/rileybathurst/riley-webpack) which is currently needing some love and I want to change a bunch of that

## Run the Sass
```% sass scss/app.scss css/app.css --watch ```

```% sass --style=compressed scss/app.scss css/app.css ```

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
- remove all direct links
- category pages the red pushes down too far
- I dont think the folding laptop screen is working anymore
- as soon as im back on the live version get the git origin sorted
- meta block updates are not working
- dark mode should load independantly to light and both split from the layout styling
- page 2 of reordered categories doesn't work it kinda shouldn't ever have to come up but it should work
- drop shadows in dark mode
- check into redirects for changed categories
- wp-pages folder needs to be fillled in
- breadcrumbs if is attachment isnt working?
- connect references and posts
- add social networks to the footers
- snow page needs love to fix broken links
- Tag titles without images are not attached to the permalink
- this image could be sharper https://rileybathurst.com/2015/05/new-zealand-snowboarder-2015/clubbies_trip_14_0164/
- this should be renamed https://rileybathurst.com/2015/05/new-zealand-snowboarder-2015/annabel_226/
- captcha, checkbox, form page? probably other ones
- I need a custom form to remove the material contact its messy
- front page needs more vertical pieces
- a:selection color needs to not be primary
- social icons need work to have a full hover state
- explore more the underline and strike is in the wrong color
- check for data-index="9" on lozad
- double check on data-alt=" for lozad images
- image should lazy load by defaultt on chrome
- I wonder if I should split the templates for vertical and horizontal menus
- theres defintley a problem with running webpack compressed js I keep getting errors of 'undefined' in the console even on basic get Element by Id queries so for now I am running an uncompressed version and using webpack for npm modules.
- picture elements have a couple pixels of clear space at the bottom this is a bigger problem with the folding laptop header
- mani menu slider colors need dark mode adjustments
main menu slider colors need dark mode adjustments
- chk order page needs ipad chrome cut off
- On small screens stop the page from jumping with the change in text maybe this is a grid not a full replace?
- .spine is using a darker than dark gray to pass contrast checks I need to work on what I am doing with all of those
- I removed prism from having it in the webpack do I care enough to bring it back or do it a new way

#### Break these notes up they are getting unruly

### Dev Notes

### Design Notes

- I could thicken up some of the small lines and gaps in the icon
- on small Im getting some bottom margin push down when hovering over Camera at the bottom of the top menu

### Featured Categories

To be able to organize the posts how I want there are a few complex things going on 
- Posts have to be marked sticky to show up on the front pages
- Posts have to be in a parent category this means the sub pages work and it's not a wierd extra query for those that has to be implemented every time it changes
- There is a new query to reorder only the categories that are needed in hopes of keeping this as speedy as possible so anything new has to be manually added to the array
- When a post doesnt have an order specified it gives it sort of a number 2
- doesnt seem to matter if posts have the same number
- I could do a more complex ordering to have be different for each category but its over kill

AAW should only show up in Code but its also underneath Clicks in website design so I need to deal with that, for now Ive just removed it from design.

### Resources

I need to bring these together in a smart way, I think markdown notes probably helps most for now

- [Pattern Lab](https://www.pattern.rileybathurst.com/?p=all)
- Reminders and Notes on iOS
- Zepplin
- [Adobe Library](https://color.adobe.com/mythemes) - Needs more assets added here
- Markdown docs in GitHub

#### Pattern Lab

Having an idea of color contrast could be really useful as I'm breaking somethings up



### Projects to add

- After Effects / dimension of wedding invite
- show reel of video titles - needs updating as well
- Rip N Grip animation
- Homewood homepage in snowledge 



### Type Scale

Base 16px

h1 - 3.052em - 48px

h2 -2.441em - 39px

h3 - 1.953em - 31.2px

h4 - 1.563em - 25px

h5 - 1.25em - 20px

small - 0.8em - 12.8px

hey
