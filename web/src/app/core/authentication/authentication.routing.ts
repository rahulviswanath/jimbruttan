
import { RouterModule  }    		  from '@angular/router';
import { LoginComponent }    		  from './login.component';
import { LogoutComponent }    		  from './logout.component';


export const authenticationRouting = RouterModule.forChild([
	{ 
		path: 'login', 
		component: LoginComponent,
		
	},
	{ 
		path: 'logout', 
		component: LogoutComponent,
		
	},
	
]);