import React from 'react';
import { Link } from 'react-router-dom';
import List from '@material-ui/core/List';
import ListItem from '@material-ui/core/ListItem';
import ListItemText from '@material-ui/core/ListItemText';
import ListItemIcon from '@material-ui/core/ListItemIcon';
import WifiIcon from '@material-ui/icons/Wifi';
import DataUsageIcon from '@material-ui/icons/DataUsage';
import SettingsIcon from '@material-ui/icons/Settings';

function Sidebar() {
  return (
    <div className="sidebar">
      <div className="menu">
        <List>
          <ListItem button component={Link} to="users">
            <ListItemIcon>
              <WifiIcon />
            </ListItemIcon>
            <ListItemText primary="Users" />
          </ListItem>
          <ListItem button component={Link} to="credentials">
            <ListItemIcon>
              <DataUsageIcon />
            </ListItemIcon>
            <ListItemText primary="Credentials" />
          </ListItem>
          <ListItem button component={Link} to="settings">
            <ListItemIcon>
              <SettingsIcon />
            </ListItemIcon>
            <ListItemText primary="Settings" />
          </ListItem>
        </List>
      </div>
    </div>
  );
}

export default Sidebar;
