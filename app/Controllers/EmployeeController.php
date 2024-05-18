<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use CodeIgniter\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        $model = new EmployeeModel();
        // $data['employees'] = $model->findAll();
        // return view('employees/index', $data);
        // Set the number of items per page
        $perPage = 10;

        // Get the current page number from the URL
        $currentPage = $this->request->getVar('page') ?? 1;

        // Get paginated employees
        $employees = $model->paginate($perPage);

        // Get pagination links
        $pager = $model->pager;

        return view('employees/index', [
            'employees' => $employees,
            'pager' => $pager,
            'currentPage' => $currentPage,
            'perPage' => $perPage,
        ]);
    }

    public function create()
    {
        return view('employees/create');
    }

    public function store()
    {
        $model = new EmployeeModel();
        $data = [
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'position' => $this->request->getPost('position'),
        ];
        $model->save($data);
        return redirect()->to('/employees');
    }

    public function edit($id)
    {
        $model = new EmployeeModel();
        $data['employee'] = $model->find($id);
        return view('employees/edit', $data);
    }

    public function update($id)
    {
        $model = new EmployeeModel();
        $data = [
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'position' => $this->request->getPost('position'),
        ];
        $model->update($id, $data);
        return redirect()->to('/employees');
    }

    public function delete($id)
    {
        $model = new EmployeeModel();
        $model->delete($id);
        return redirect()->to('/employees');
    }
}
