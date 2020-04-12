import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { FuncionarioPainelTarefasComponent } from './funcionario-painel-tarefas.component';

describe('FuncionarioPainelTarefasComponent', () => {
  let component: FuncionarioPainelTarefasComponent;
  let fixture: ComponentFixture<FuncionarioPainelTarefasComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ FuncionarioPainelTarefasComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(FuncionarioPainelTarefasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
