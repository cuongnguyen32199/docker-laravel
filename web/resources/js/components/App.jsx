import React from 'react';
import ReactDOM from 'react-dom';
import List from '@material-ui/core/List';
import ListItem from '@material-ui/core/ListItem';
import ListItemText from '@material-ui/core/ListItemText';
import ListItemIcon from '@material-ui/core/ListItemIcon';
import WifiIcon from '@material-ui/icons/Wifi';
import DataUsageIcon from '@material-ui/icons/DataUsage';
import SettingsIcon from '@material-ui/icons/Settings';

function App() {
  return (
    <div className="app">
      <div className="header">
        <div className="header__brand">
          <span>Laravel React</span>
        </div>
      </div>
      <div className="sidebar">
        <div className="menu">
          <List>
            <ListItem button selected>
              <ListItemIcon>
                <WifiIcon />
              </ListItemIcon>
              <ListItemText primary="Networks" />
            </ListItem>
            <ListItem button>
              <ListItemIcon>
                <DataUsageIcon />
              </ListItemIcon>
              <ListItemText primary="Database Usage" />
            </ListItem>
            <ListItem button>
              <ListItemIcon>
                <SettingsIcon />
              </ListItemIcon>
              <ListItemText primary="Settings" />
            </ListItem>
          </List>
        </div>
      </div>
      <div className="content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, rerum.</p>
      </div>
    </div>
  );
}

if (document.getElementById('root')) {
  ReactDOM.render(<App />, document.getElementById('root'));
}
