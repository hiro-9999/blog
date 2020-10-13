https://unform.dev/examples/react-select/

https://react-select.com/homehttps://react-select.com/home


https://react-select.com/home#fixed-options

https://w3g.jp/xhtml/dic/onblur

# Oculusブラウザー11.0
https://developer.oculus.com/documentation/oculus-browser/browser-release-notes/

# go 基本はAndroid7.1のChrome相当なので、エンジン的にはモダンブラウザとして問題なく扱えると思います。
https://qiita.com/wakufactory/items/98658e8d089386a7b073


https://qiita.com/Takepepe/items/f1ba99a7ca7e66290f24
type Props = {
  onClick: (event: React.MouseEvent<HTMLElement, MouseEvent>) => void
}

# handleBlur
https://github.com/react-component/select

https://www.telerik.com/blogs/an-expense-app-with-react-and-typescript
## onfocus="this.selectedIndex=0;"

https://stackoverflow.com/questions/15940354/alternative-to-onblur-onchange-in-select

# npm i -S react-select
https://developer.aliyun.com/mirror/npm/package/react-select

## test
https://github.com/DefinitelyTyped/DefinitelyTyped/blob/master/types/react-select/v1/react-select-tests.tsx

https://ja.reactjs.org/docs/forms.html

?? ok
https://www.366service.com/jp/qa/146ee1097aa558a2ea53640fcb1048e9

<select>
  <option value="grapefruit">Grapefruit</option>
  <option value="lime">Lime</option>
  <option selected value="coconut">Coconut</option>
  <option value="mango">Mango</option>
</select>
selected 属性があるため Coconut オプションが最初に選択されていることに注意してください。この selected 属性の代わりに React は value 属性を親の select タグで使用します。一箇所で更新すればよいだけなので、制御されたコンポーネントを使う場合にはこちらがより便利です。 例えば：

class FlavorForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {value: 'coconut'};

    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    this.setState({value: event.target.value});
  }

  handleSubmit(event) {
    alert('Your favorite flavor is: ' + this.state.value);
    event.preventDefault();
  }

  render() {
    return (
      <form onSubmit={this.handleSubmit}>
        <label>
          Pick your favorite flavor:
          <select value={this.state.value} onChange={this.handleChange}>
            <option value="grapefruit">Grapefruit</option>
            <option value="lime">Lime</option>
            <option value="coconut">Coconut</option>
            <option value="mango">Mango</option>
          </select>
        </label>
        <input type="submit" value="Submit" />
      </form>
    );
  }
}


https://stackoverflow.com/questions/63696310/how-to-use-typescript-with-the-definition-of-custom-styles-for-a-select-using-re

import Select, { StylesConfig } from 'react-select';

const selectStyle: StylesConfig = {
  control: (provided, state) => {
    // provided has CSSProperties type
    // state has ControlProps<{}> type

    // return type is CSSProperties which means this line will throw
    // error if uncommented
    // return false;

    return {
      ...provided,
      ...yourCustomStyle,
    };
  },
}

const Select: React.FC<Select> = (
  {defaultValue, onChange, options}: Select) => (
  <ReactSelect
    styles={selectStyles}
    …
  </ReactSelect>
)

# react-select
https://stackoverflow.com/questions/47761098/how-do-i-define-an-onchange-handler-for-react-select-in-typescript
