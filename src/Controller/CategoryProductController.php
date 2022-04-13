<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CategoryProduct Controller
 *
 * @property \App\Model\Table\CategoryProductTable $CategoryProduct
 * @method \App\Model\Entity\CategoryProduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoryProductController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Product', 'Category'],
        ];
        $categoryProduct = $this->paginate($this->CategoryProduct);

        $this->set(compact('categoryProduct'));
    }

    /**
     * View method
     *
     * @param string|null $id Category Product id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoryProduct = $this->CategoryProduct->get($id, [
            'contain' => ['Product', 'Category'],
        ]);

        $this->set(compact('categoryProduct'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoryProduct = $this->CategoryProduct->newEmptyEntity();
        if ($this->request->is('post')) {
            $categoryProduct = $this->CategoryProduct->patchEntity($categoryProduct, $this->request->getData());
            if ($this->CategoryProduct->save($categoryProduct)) {
                $this->Flash->success(__('The category product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category product could not be saved. Please, try again.'));
        }
        $product = $this->CategoryProduct->Product->find('list', ['limit' => 200])->all();
        $category = $this->CategoryProduct->Category->find('list', ['limit' => 200])->all();
        $this->set(compact('categoryProduct', 'product', 'category'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Category Product id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoryProduct = $this->CategoryProduct->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoryProduct = $this->CategoryProduct->patchEntity($categoryProduct, $this->request->getData());
            if ($this->CategoryProduct->save($categoryProduct)) {
                $this->Flash->success(__('The category product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The category product could not be saved. Please, try again.'));
        }
        $product = $this->CategoryProduct->Product->find('list', ['limit' => 200])->all();
        $category = $this->CategoryProduct->Category->find('list', ['limit' => 200])->all();
        $this->set(compact('categoryProduct', 'product', 'category'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Category Product id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoryProduct = $this->CategoryProduct->get($id);
        if ($this->CategoryProduct->delete($categoryProduct)) {
            $this->Flash->success(__('The category product has been deleted.'));
        } else {
            $this->Flash->error(__('The category product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
