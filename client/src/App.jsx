import React, { useEffect } from 'react';

function App() {
  useEffect(() => {
    console.log('useEffect running...');
  });

  return <div className="App">Hello React</div>;
}

export default App;
