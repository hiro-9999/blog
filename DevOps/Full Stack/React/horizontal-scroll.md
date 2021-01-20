# npmtrends
https://www.npmtrends.com/

# scrolling-menu
https://www.npmjs.com/package/react-horizontal-scrolling-menu

# react-masonry-component
https://dev.to/aumayeung/use-react-to-display-images-in-a-grid-like-google-and-flickr-4kdi

# React-Scroll
https://qiita.com/takk0715/items/6b82d7b4d13134d717eb

# material-ui
https://material-ui.com/components/grid-list/#SingleLineGridList.tsx

https://stackoverflow.com/questions/63006538/react-material-ui-how-to-create-horizontal-scroll-cards


```php
import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import GridList from '@material-ui/core/GridList';
import GridListTile from '@material-ui/core/GridListTile';
import GridListTileBar from '@material-ui/core/GridListTileBar';

const useStyles = makeStyles((theme) => ({
  root: {
    display: 'flex',
    flexWrap: 'wrap',
    justifyContent: 'space-around',
    overflow: 'hidden',
  },
  gridList: {
    flexWrap: 'nowrap'
  }
}));

const tileData = [
{
  img: 'images/image1.jpg',
  title: 'title'
},
{
  img: 'images/image2.jpg',
  title: 'title'
},
{
  img: 'images/image3.jpg',
  title: 'title'
}
];

export default function SingleLineGridList() {
  const classes = useStyles();

  return (
    <div className={classes.root}>
      <GridList className={classes.gridList} cols={2.5}>
        {tileData.map((tile) => (
          <GridListTile key={tile.img}>
            <img src={tile.img} alt={tile.title} />            
            <GridListTileBar
              title={tile.title}
            />
          </GridListTile>
        ))}
      </GridList>
    </div>
  );
}
```
# Scroll Image Gallery
https://www.digitalocean.com/community/tutorials/how-to-build-an-infinite-scroll-image-gallery-with-react-css-grid-and-unsplash

# Create a Scrolling Image Slider in React
https://codedaily.io/tutorials/67/Create-a-Snapping-Image-Swiper-like-Instagram-with-React

# scroll-parallax
https://www.npmjs.com/package/react-scroll-parallax

#  react-scroll
https://dev.to/kartikbudhiraja/create-horizontal-scroll-list-in-react-1h62

# react-image-scroller
https://cmmartti.github.io/react-image-scroller/?spm=a2c6h.14275010.0.0.765d58d5K31N0v

# how-to-implement-scroll-with-react-gridlist
https://blog.logrocket.com/how-to-implement-scroll-with-react-gridlist/

# native view
https://rossbulat.medium.com/react-native-carousels-with-horizontal-scroll-views-60b0587a670c

# react-photo-gallery
http://neptunian.github.io/react-photo-gallery/api.html

<Gallerys targetRowHeight={200}  direction={"row"} margin={3} photos={photo} />

https://codesandbox.io/s/xpml0zmv0o?file=/index.js:1746-1768

# Single line Grid list
https://material-ui.com/components/grid-list/

//10 Best React Gallery Libraries
https://openbase.com/categories/js/best-react-gallery-libraries?orderBy=RECOMMENDED&


https://dev.to/kartikbudhiraja/create-horizontal-scroll-list-in-react-1h62

https://www.npmjs.com/package/react-horizontal-scrolling

https://www.npmjs.com/package/react-scroll-horizontal

https://github.com/neptunian/react-photo-gallery

https://stackoverflow.com/questions/56657385/horizontal-scrolling-react-photo-gallery
```php
//use in css
.react-photo-gallery--gallery div {
  flex-flow: nowrap !important;
}


//use in sass/scss
.react-photo-gallery--gallery{
  div{
    flex-flow: nowrap !important;
  }
}
```

https://www.npmjs.com/package/react-image-gallery

# onClick
 <Gallery photos={photos} onClick={openLightbox} />
 
https://codesandbox.io/s/awesome-bassi-5vn3lvz2n4?from-embed=&file=/index.js:386-397
```php
 const openLightbox = useCallback((event, { photo, index }) => {
    setCurrentImage(index);
    setViewerIsOpen(true);
  }, []);
```
https://codesandbox.io/s/x3063kpm7z?file=/src/PhotoGallery.js
 ```php
 onClick = event => {
    alert(event.target.src)
  }
  render() {
    return (
      <Gallery
        photos={this.state.photos}
        onClick={this.onClick}
      />
    )
  }
```

https://github.com/xiaolin/react-image-gallery

# 評価ページ
https://openbase.com/js/react-image-gallery
