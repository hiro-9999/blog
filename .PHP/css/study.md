Every layout relearn CSS layout by example by Heydon Pickering Andy Bell (z-lib.org).pdf
## content, padding, border, and margin.

inline elements grow horizontally, and block elements grow vertically.

*{
box-sizing: border-box;
}

1rem = 16px

# 1vw is equal to 1% of the screen’s width, and 1vh is equal to 1% of the screen’s height.

```css
@media screen and (max-width: 1000px) {/* スクリーンサイズが1000px以下の場合に適用 */} 
 
@media screen and (max-width: 767px) {/* スクリーンサイズが767px以下の場合に適用 */} 
 
@media screen and (max-width: 480px) {/* スクリーンサイズが480px以下の場合に適用 */} 
 
@media screen and (max-width: 320px) {/* スクリーンサイズが320px以下の場合に適用 */} 
 
@media screen and (min-width: 768px) {/* スクリーンサイズが768px以上の場合に適用 */} 
min-width と max-width を併用すると可読性が低下します。どちらか一方を利用することをおすすめします。

:root {
  font-size: calc(1rem + 0.5vw); //1vw is equal to 1% of the screen’s width, and 1vh is equal to 1% of the screen’s height.
}

.box {
  /* ↓ Padding set to the first point on the modular scale */
  padding: var(--s1);
  /* ↓ Assumes you have a --border-thin var */
  border: var(--border-thin) solid;
  /* ↓ Always apply the transparent outline, for high contrast mode */
  outline: var(--border-thin) transparent;
  outline-offset: calc(var(--border-thin) * -1);
  /* ↓ The light and dark color vars */
  --color-light: #fff;
  --color-dark: #000;
  color: var(--color-dark);
  background-color: var(--color-light);
}
.box * {
  /* ↓ Force colors to inherit from the parent
  and honor inversion (below) */
  color: inherit;
}
.box.invert { //invert 
  /* ↓ The color vars inverted */
  color: var(--color-light);
  background-color: var(--color-dark);
}

.center {
  box-sizing: content-box;
  max-width: 60ch;
  margin-left: auto;
  margin-right: auto;
  display: flex;
  flex-direction: column;
  align-items: center;
}
```
https://www.wakuwakubank.com/posts/443-html-css-media-query/
