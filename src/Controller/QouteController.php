<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Qoute Controller
 *
 * @property \App\Model\Table\QouteTable $Qoute
 * @method \App\Model\Entity\Qoute[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QouteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Product', 'Users', 'Delivery'],
        ];
        $qoute = $this->paginate($this->Qoute);

        $this->set(compact('qoute'));
    }

    /**
     * View method
     *
     * @param string|null $id Qoute id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $qoute = $this->Qoute->get($id, [
            'contain' => ['Product', 'Users', 'Delivery', 'Orders'],
        ]);

        $this->set(compact('qoute'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $qoute = $this->Qoute->newEmptyEntity();
        if ($this->request->is('post')) {
            $qoute = $this->Qoute->patchEntity($qoute, $this->request->getData());
            if ($this->Qoute->save($qoute)) {
                $this->Flash->success(__('The qoute has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The qoute could not be saved. Please, try again.'));
        }
        $product = $this->Qoute->Product->find('list', ['limit' => 200])->all();
        $users = $this->Qoute->Users->find('list', ['limit' => 200])->all();
        $delivery = $this->Qoute->Delivery->find('list', ['limit' => 200])->all();
        $this->set(compact('qoute', 'product', 'users', 'delivery'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Qoute id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $qoute = $this->Qoute->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $qoute = $this->Qoute->patchEntity($qoute, $this->request->getData());
            if ($this->Qoute->save($qoute)) {
                $this->Flash->success(__('The qoute has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The qoute could not be saved. Please, try again.'));
        }
        $product = $this->Qoute->Product->find('list', ['limit' => 200])->all();
        $users = $this->Qoute->Users->find('list', ['limit' => 200])->all();
        $delivery = $this->Qoute->Delivery->find('list', ['limit' => 200])->all();
        $this->set(compact('qoute', 'product', 'users', 'delivery'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Qoute id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $qoute = $this->Qoute->get($id);
        if ($this->Qoute->delete($qoute)) {
            $this->Flash->success(__('The qoute has been deleted.'));
        } else {
            $this->Flash->error(__('The qoute could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
