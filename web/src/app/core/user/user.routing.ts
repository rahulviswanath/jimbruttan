
import { RouterModule  }    		  from '@angular/router';
import { RegisterComponent }    		  from './register.component';


export const userRouting = RouterModule.forChild([
	{ 
		path: 'register', 
		component: RegisterComponent,
		
	},
	
	
]);