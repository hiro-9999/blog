https://github.com/video-dev/hls.js/blob/master/docs/API.md#maxbufferlength

maxMaxBufferLength
(default 600s)

Maximum buffer length in seconds. Hls.js will never exceed this value, even if maxBufferSize is not reached yet.

hls.js tries to buffer up to a maximum number of bytes (60 MB by default) rather than to buffer up to a maximum nb of seconds. this is to mimic the browser behaviour (the buffer eviction algorithm is starting after the browser detects that video buffer size reaches a limit in bytes)

maxBufferLength is the minimum guaranteed buffer length that hls.js will try to achieve, even if that value exceeds the amount of bytes 60 MB of memory. maxMaxBufferLength acts as a capping value, as if bitrate is really low, you could need more than one hour of buffer to fill 60 MB.
