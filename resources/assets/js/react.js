import React, { Component } from "react";
import ReactDOM from "react-dom";
import App from "./containers/App";
import { BrowserRouter } from "react-router-dom";
import registerServiceWorker from "./registerServiceWorker";

ReactDOM.render(
  // <Provider store={store}>
  <BrowserRouter>
    <App />
  </BrowserRouter>,
  // </Provider>,
  document.getElementById("root")
);

registerServiceWorker();
