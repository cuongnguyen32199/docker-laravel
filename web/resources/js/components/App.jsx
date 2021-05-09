import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Switch, Route } from 'react-router-dom';

import Header from './Header';
import Sidebar from './Sidebar';
import Users from './Users';
import Credentials from './Credentials';
import NotFound from './NotFound';

function App() {
  return (
    <BrowserRouter>
      <div className="app">
        <Header />
        <Sidebar />
        <div className="content">
          <Switch>
            <Route exact path="/users">
              <Users />
            </Route>
            <Route exact path="/credentials">
              <Credentials />
            </Route>
            <Route path="*">
              <NotFound />
            </Route>
          </Switch>
        </div>
      </div>
    </BrowserRouter>
  );
}

if (document.getElementById('root')) {
  ReactDOM.render(<App />, document.getElementById('root'));
}
