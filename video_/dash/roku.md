UTCTiming
As of Roku OS 10.0, the Roku OS supports the use of UTCTiming elements in DASH MPDs (manifests), as described in Section 4.7.2 of "Guidelines for Implementation: DASH-IF Interoperability Points" (Version 4.3: November, 2018. A UTCTiming element declares a mechanism that the player can use to keep its clock in synchronization with that of the streaming server. Here is an example:

<UTCTiming schemeIDUri=“ urn:mpeg:dash:utc:ntp:2014” value=“time.nist.gov”/>
The schemeIDUri parameter indicates the mechanism selected (one of several available options given in Section 4.7.2), while the value parameter indicates the standard time source to be employed.

https://developer.roku.com/en-gb/docs/specs/media/dash-if.md

https://developer.roku.com/en-gb/docs/developer-program/media-playback/trick-mode/hls-and-dash.md
