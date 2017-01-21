<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Processos Controller
 *
 * @property \App\Model\Table\ProcessosTable $Processos
 */
class ProcessosController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Search.Prg', [
            'actions' => ['index', 'lookup']
            ]);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $query = $this->Processos
        ->find('search', ['search' => $this->request->query]);
        $this->set('processos', $this->paginate($query));
    }

    /**
     * View method
     *
     * @param string|null $id Processo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $processo = $this->Processos->get($id, [
            'contain' => []
        ]);

        $this->set('processo', $processo);
        $this->set('_serialize', ['processo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $processo = $this->Processos->newEntity();
        if ($this->request->is('post')) {
            $processo = $this->Processos->patchEntity($processo, $this->request->data);
            if ($this->Processos->save($processo)) {
                $this->Flash->success(__('O processo foi salvo!'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O processo não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('processo'));
        $this->set('_serialize', ['processo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Processo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $processo = $this->Processos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $processo = $this->Processos->patchEntity($processo, $this->request->data);
            if ($this->Processos->save($processo)) {
                $this->Flash->success(__('O processo foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O processo não pôde ser salvo. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('processo'));
        $this->set('_serialize', ['processo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Processo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $processo = $this->Processos->get($id);
        if ($this->Processos->delete($processo)) {
            $this->Flash->success(__('O processo foi deletado.'));
        } else {
            $this->Flash->error(__('O processo não pôde ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
