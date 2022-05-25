import { NgModule } from "@angular/core";
import { RouterModule } from "@angular/router";

import { NavBarComponent } from "./component/nav-bar/nav-bar.component";
import { Error404Component } from "./component/error/error404.component";

@NgModule({
    declarations: [
        NavBarComponent,
        Error404Component
    ],
    imports: [
        RouterModule.forChild([
            {
                path: '**', component: Error404Component
            }
        ])
    ],
    exports: [
        NavBarComponent
    ]
})
export class CoreModule {

}
