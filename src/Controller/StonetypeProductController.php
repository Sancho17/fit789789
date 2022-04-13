<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StonetypeProduct Controller
 *
 * @property \App\Model\Table\StonetypeProductTable $StonetypeProduct
 * @method \App\Model\Entity\StonetypeProduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StonetypeProductController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['StoneType', 'Product'],
        ];
        $stonetypeProduct = $this->paginate($this->StonetypeProduct);

        $this->set(compact('stonetypeProduct'));
    }

    /**
     * View method
     *
     * @param string|null $id Stonetype Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stonetypeProduct = $this->StonetypeProduct->get($id, [
            'contain' => ['StoneType', 'Product'],
        ]);

        $this->set(compact('stonetypeProduct'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stonetypeProduct = $this->StonetypeProduct->newEmptyEntity();
        if ($this->request->is('post')) {
            $stonetypeProduct = $this->StonetypeProduct->patchEntity($stonetypeProduct, $this->request->getData());
            if ($this->StonetypeProduct->save($stonetypeProduct)) {
                $this->Flash->success(__('The stonetype product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stonetype product could not be saved. Please, try again.'));
        }
        $stoneType = $this->StonetypeProduct->StoneType->find('list', ['limit' => 200])->all();
        $product = $this->StonetypeProduct->Product->find('list', ['limit' => 200])->all();
        $this->set(compact('stonetypeProduct', 'stoneType', 'product'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Stonetype Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stonetypeProduct = $this->StonetypeProduct->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stonetypeProduct = $this->StonetypeProduct->patchEntity($stonetypeProduct, $this->request->getData());
            if ($this->StonetypeProduct->save($stonetypeProduct)) {
                $this->Flash->success(__('The stonetype product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stonetype product could not be saved. Please, try again.'));
        }
        $stoneType = $this->StonetypeProduct->StoneType->find('list', ['limit' => 200])->all();
        $product = $this->StonetypeProduct->Product->find('list', ['limit' => 200])->all();
        $this->set(compact('stonetypeProduct', 'stoneType', 'product'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Stonetype Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stonetypeProduct = $this->StonetypeProduct->get($id);
        if ($this->StonetypeProduct->delete($stonetypeProduct)) {
            $this->Flash->success(__('The stonetype product has been deleted.'));
        } else {
            $this->Flash->error(__('The stonetype product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
