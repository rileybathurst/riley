# Riley Bathurst Wordpress Site

Except now some of the project is being build with webpack so that is held over at [riley-webpack](https://github.com/rileybathurst/riley-webpack) which is currently needing some love and I want to change a bunch of that

## Run the Sass

```bash
% sass scss/app.scss css/app.css --watch
```

```bash
% sass --style=compressed scss/app.scss css/app.css
```

## Gutenberg

Means I have less template pages to work on but also a little less flexibility with the grid?
I guess thats not true I could float certain sections to things and others not that could be pretty interesing.
This needs a sub grid which is annoying but maybe an interesting piece to work on?
I'll try it out quick on firefox.

### Fixes needed

- specific bottom is running lozad which has been deleted and is also a mess
- the top right svg should also open a menu
- meta block updates are not working
- page 2 of reordered categories doesn't work it kinda shouldn't ever have to come up but it should work
- check for data-index="9" on lozad
- double check on data-alt=" for lozad images

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
