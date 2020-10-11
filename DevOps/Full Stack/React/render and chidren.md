render and chidren

コンポーネントの描画には、componentでコンポーネントを指定する以外にも、renderとchildrenを使う方法もあります。renderはインナーレンダリングを行います。

<Route path="/" render={(props) => <h2>Home</h2>} />
childrenもrenderと同じでインナーレンダリングを行うのですが、パスにマッチしない場合でもルーティングします。childrenの利用には他の解説を先に行う必要があるため、詳細は後述する「routeのカスタマイズ」で行います。

https://the2g.com/2789
