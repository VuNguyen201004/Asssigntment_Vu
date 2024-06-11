<?php

namespace Vu\Mvcoop\Models;

use Vu\Mvcoop\Commons\Model;

class Category extends Model 
{
    protected string $tableName = 'categories';

    // Lấy tất cả các danh mục
    public function all() {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->fetchAllAssociative();
    }

    // Tìm danh mục theo ID
    public function findByID($id) {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('id = :id')
            ->setParameter('id', $id)
            ->fetchAssociative();
    }

    // Thêm danh mục mới
    public function insert(array $data) {
        return $this->queryBuilder
            ->insert($this->tableName)
            ->values([
                'name' => ':name'
            ])
            ->setParameter('name', $data['name'])
            ->executeStatement();
    }

    // Cập nhật danh mục theo ID
    public function update($id, array $data) {
        return $this->queryBuilder
            ->update($this->tableName)
            ->set('name', ':name')
            ->where('id = :id')
            ->setParameter('name', $data['name'])
            ->setParameter('id', $id)
            ->executeStatement();
    }

    // Xóa danh mục theo ID
    public function delete($id) {
        return $this->queryBuilder
            ->delete($this->tableName)
            ->where('id = :id')
            ->setParameter('id', $id)
            ->executeStatement();
    }
}
