# Intercept/handle browser's back button in React-router?
https://stackoverflow.com/questions/39342195/intercept-handle-browsers-back-button-in-react-router

'''
import React,{useEffect,useState} from 'react'

function HandleBrowserBackButton() {
  const [isBackButtonClicked, setBackbuttonPress] = useState(false)

  useEffect(() => {

    window.history.pushState(null, null, window.location.pathname);
    window.addEventListener('popstate', onBackButtonEvent);

    //logic for showing popup warning on page refresh
    window.onbeforeunload = function () {

      return "Data will be lost if you leave the page, are you sure?";
    };
    return () => {
      window.removeEventListener('popstate', onBackButtonEvent);
    }

    // eslint-disable-next-line react-hooks/exhaustive-deps
  }, []);
  const onBackButtonEvent = (e) => {
    e.preventDefault();
    if (!isBackButtonClicked) {

      if (window.confirm("Do you want to go to Test Listing")) {
        setBackbuttonPress(true)
        props.history.go(listingpage)
      } else {
        window.history.pushState(null, null, window.location.pathname);
        setBackbuttonPress(false)
      }
    }
  }

  return (
    <div>

    </div>
  )
}

export default HandleBrowserBackButton
'''

1,declare isBackButtonClicked and initialize it as false and maintain the state using setBackbuttonPress function.
const [isBackButtonClicked, setBackbuttonPress] = useState(false);

2,In componentdidmount, add the following lines of code
window.history.pushState(null, null, window.location.pathname);
window.addEventListener('popstate', onBackButtonEvent);

3,define onBackButtonEvent Function and write logic as per your requirement.

  const onBackButtonEvent = (e) => {
  e.preventDefault();
  if (!isBackButtonClicked) {

  if (window.confirm("Do you want to go to Test Listing")) {
    setBackbuttonPress(true)
    props.history.go(listingpage)
  } else {
    window.history.pushState(null, null, window.location.pathname);
    setBackbuttonPress(false)
  }
}
}

4,In componentwillmount unsubscribe onBackButtonEvent Function
