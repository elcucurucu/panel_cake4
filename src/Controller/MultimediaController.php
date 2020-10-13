<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Multimedia Controller
 *
 * @property \App\Model\Table\MultimediaTable $Multimedia
 * @method \App\Model\Entity\Multimedia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MultimediaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $multimedia = $this->paginate($this->Multimedia);

        $this->set(compact('multimedia'));
    }

    /**
     * View method
     *
     * @param string|null $id Multimedia id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $multimedia = $this->Multimedia->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('multimedia'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $multimedia = $this->Multimedia->newEmptyEntity();
        if ($this->request->is('post')) {
            $multimedia = $this->Multimedia->patchEntity($multimedia, $this->request->getData());
            if ($this->Multimedia->save($multimedia)) {
                $this->Flash->success(__('The multimedia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The multimedia could not be saved. Please, try again.'));
        }
        $this->set(compact('multimedia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Multimedia id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $multimedia = $this->Multimedia->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $multimedia = $this->Multimedia->patchEntity($multimedia, $this->request->getData());
            if ($this->Multimedia->save($multimedia)) {
                $this->Flash->success(__('The multimedia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The multimedia could not be saved. Please, try again.'));
        }
        $this->set(compact('multimedia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Multimedia id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $multimedia = $this->Multimedia->get($id);
        if ($this->Multimedia->delete($multimedia)) {
            $this->Flash->success(__('The multimedia has been deleted.'));
        } else {
            $this->Flash->error(__('The multimedia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
