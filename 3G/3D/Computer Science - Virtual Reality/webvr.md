https://blog.csdn.net/byeweiyang/article/details/80125166
three.js
vrHMD
 //瞳距的偏移
    eyeTranslationL.fromArray( eyeParamsL.offset );
    eyeTranslationR.fromArray( eyeParamsR.offset );
    //represents a field of view defined by 4 different degree values describing the view from a center point.
    //获得左右眼的FOV
    eyeFOVL = eyeParamsL.fieldOfView;
    eyeFOVR = eyeParamsR.fieldOfView;
