import React from 'react';
import ReactDOM from 'react-dom';
import PaperBase from './PaperBase';

function Wrapper() {
  return (
    <PaperBase />
  );
}

if (document.getElementById('root')) {
  ReactDOM.render(<Wrapper />, document.getElementById('root'));
}
