# react-photo-gallery
http://neptunian.github.io/react-photo-gallery/api.html

<Gallerys targetRowHeight={200}  direction={"row"} margin={3} photos={photo} />


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
