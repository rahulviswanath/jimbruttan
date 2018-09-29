
import { RouterModule  }     from '@angular/router';

export const routing = RouterModule.forRoot([
	{ path: '**', redirectTo: 'not-found' }
]);