import { Component, OnInit } from '@angular/core';
import { GerenteSidebarEnum } from '../../enums/gerente-sidebar.enum';

@Component({
  selector: 'app-gerente-sidebar',
  templateUrl: './gerente-sidebar.component.html',
  styleUrls: ['./gerente-sidebar.component.css']
})
export class GerenteSidebarComponent implements OnInit {

    public selected: GerenteSidebarEnum;

    public gerenteSidebarEnum: typeof GerenteSidebarEnum = GerenteSidebarEnum

    constructor() { }

    ngOnInit() {
    }

}
