Every layout relearn CSS layout by example by Heydon Pickering Andy Bell (z-lib.org).pdf
## content, padding, border, and margin.

inline elements grow horizontally, and block elements grow vertically.

*{
box-sizing: border-box;
}

1rem = 16px

```css
@media screen and (max-width: 1000px) {/* スクリーンサイズが1000px以下の場合に適用 */} 
 
@media screen and (max-width: 767px) {/* スクリーンサイズが767px以下の場合に適用 */} 
 
@media screen and (max-width: 480px) {/* スクリーンサイズが480px以下の場合に適用 */} 
 
@media screen and (max-width: 320px) {/* スクリーンサイズが320px以下の場合に適用 */} 
 
@media screen and (min-width: 768px) {/* スクリーンサイズが768px以上の場合に適用 */} 
min-width と max-width を併用すると可読性が低下します。どちらか一方を利用することをおすすめします。

:root {
  font-size: calc(1rem + 0.5vw);
}
```
https://www.wakuwakubank.com/posts/443-html-css-media-query/
