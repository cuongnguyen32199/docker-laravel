import React from 'react';
import ReactDOM from 'react-dom';
import Paperbase from './Paperbase';

function Wrapper() {
    return (
        <Paperbase />
    );
}

if (document.getElementById('root')) {
    ReactDOM.render(<Wrapper />, document.getElementById('root'));
}
