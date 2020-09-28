https://www.i18next.com/overview/configuration-options#misc

https://www.codeandweb.com/babeledit/tutorials/how-to-translate-your-react-app-with-react-i18next
```
import { withTranslation } from 'react-i18next';

class RootContainer extends React.Component {
  constructor(props) {
    super(props);
  }

  render() {
   <span>{this.props.t('Home')}</span>
  }
}
```

# i18nextの翻訳システム
## react-i18next
https://suzukalight.com/2019-09-09-react-i18next/

https://note.com/shinchi/n/naeed38f477e8

## react-intl
https://qiita.com/mojibakeo/items/25930bb6eee33594af54

# I18nextProvider
https://react.i18next.com/misc/testing#testing-without-stubbing

```
import React from 'react';
import { Provider } from 'react-redux';
import { mount } from 'enzyme';
import { I18nextProvider } from 'react-i18next';
import configureStore from 'redux-mock-store';
import ContactTable from './ContactTable';
import actionTypes from '../constants';
import i18n from '../i18nForTests';

const mockStore = configureStore([]);
const store = mockStore({ contacts: [ ] });

it('dispatches SORT_TABLE', () => {
  const enzymeWrapper = mount(
    <Provider store={store}>
      <I18nextProvider i18n={i18n}>
        <ContactTable />
      </I18nextProvider>
    </Provider>
  );
  enzymeWrapper.find('.sort').simulate('click');
  const actions = store.getActions();
  expect(actions).toEqual([{ type: actionTypes.SORT_TABLE }]);
});
```
