# Create a Scrolling Image Slider in React
https://medium.com/@RahulTMody/create-a-scrolling-image-slider-in-react-1e4eddcd407b

# react-image-scroller
https://cmmartti.github.io/react-image-scroller/?spm=a2c6h.14275010.0.0.765d58d5K31N0v

# native view
https://rossbulat.medium.com/react-native-carousels-with-horizontal-scroll-views-60b0587a670c

# react-photo-gallery
http://neptunian.github.io/react-photo-gallery/api.html

<Gallerys targetRowHeight={200}  direction={"row"} margin={3} photos={photo} />

https://codesandbox.io/s/xpml0zmv0o?file=/index.js:1746-1768

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
