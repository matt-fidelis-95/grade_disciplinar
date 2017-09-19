<?php

namespace App\Controller;

use App\Controller\AppController;

class CursosController extends AppController
{
    public function index()
    {
        $cursos = $this->paginate($this->Cursos);

        $this->set(compact('cursos'));
        $this->set('_serialize', ['cursos']);
    }

    public function view($id = null)
    {
        $curso = $this->Cursos->get($id, ['contain' => ['Disciplinas']]);
        $this->set('curso', $curso);
        $this->set('_serialize', ['curso']);
    }

    public function add()
    {
        $curso = $this->Cursos->newEntity();

        if ($this->request->is('post')) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->getData());
            if ($this->Cursos->save($curso)) {
                $this->Flash->success('o curso foi salvo!');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('o curso não pode ser salvo. Por favor tente, novamente.');
        }
        $this->set(compact('curso'));
        $this->set('_serialize',['curso']);
    }
    public function edit($id = null)
    {
        $curso = $this->Cursos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $curso = $this->Cursos->patchEntity($curso, $this->request->getData());
            if ($this->Cursos->save($curso)) {
                $this->Flash->success(__('The curso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The curso could not be saved. Please, try again.'));
        }
        $this->set(compact('curso'));
        $this->set('_serialize', ['curso']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $curso = $this->Cursos->get($id);
        if ($this->Cursos->delete($curso)) {
            $this->Flash->success(__('The curso has been deleted.'));
        } else {
            $this->Flash->error(__('The curso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

?>