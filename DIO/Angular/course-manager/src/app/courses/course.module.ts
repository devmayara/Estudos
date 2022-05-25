import { NgModule } from "@angular/core";
import { CommonModule } from "@angular/common";
import { FormsModule } from "@angular/forms";
import { RouterModule } from "@angular/router";

import { CourseListComponent } from "./course-list.component";
import { CourseInfoComponent } from "./course-info.component";
import { AppPipeModule } from '../shered/pipe/app-pipe.module';
import { StarModule } from "../shered/component/star/star.module";

@NgModule({
    declarations: [
        CourseListComponent,
        CourseInfoComponent
    ],
    imports: [
        CommonModule,
        FormsModule,
        AppPipeModule,
        StarModule,
        RouterModule.forChild([
            {
              path: 'courses', component: CourseListComponent
            },
            {
              path: 'courses/info/:id', component: CourseInfoComponent
            }
        ])
    ]
})
export class CourseModule {
  
}
