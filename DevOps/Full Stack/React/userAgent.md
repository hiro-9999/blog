 const ua = window.navigator.userAgent.toLowerCase();
        if (ua.indexOf('iphone') > 0 || ua.indexOf('ipod') > 0 || ua.indexOf('android') > 0 && ua.indexOf('mobile') > 0) {
            this.setState({ device: 'sp' });
        } else if (ua.indexOf('ipad') > 0 || ua.indexOf('android') > 0) {
            // iOS12 まで
            this.setState({ device: 'tab' });
        } else if (ua.indexOf('ipad') > -1 || ua.indexOf('macintosh') > -1 && 'ontouchend' in document) {
            // iOS13 以降
            this.setState({ device: 'tab' });
        } else {
            this.setState({ device: 'pc' });
        }
    }
