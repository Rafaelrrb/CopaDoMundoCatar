import React from 'react'
import ReactDOM from 'react-dom/client'
import { App } from './pages/App'
import { QueryClientProvider } from 'react-query';
import {BrowserRouter} from 'react-router-dom';
import { queryClient } from './services/queryClient';


ReactDOM.createRoot(document.getElementById('root') as HTMLElement).render(
  <BrowserRouter>
    <QueryClientProvider client={queryClient}>
      <App />
    </QueryClientProvider>
  </BrowserRouter>
)
