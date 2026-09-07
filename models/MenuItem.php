<?php
/**
 * Menu Item Model - Individual menu items
 */

class MenuItem {
    private $pdo;
    private $table = 'menu_items';

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getById($id) {
        $query = "SELECT * FROM {$this->table} WHERE id = ? AND status = 1";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getByCategory($categoryId) {
        $query = "SELECT * FROM {$this->table} WHERE category_id = ? AND status = 1 ORDER BY display_order ASC";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$categoryId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $query = "INSERT INTO {$this->table} (category_id, title, icon, link, display_order, has_submenu, badge_text, badge_class) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([
            $data['category_id'],
            $data['title'],
            $data['icon'],
            $data['link'],
            $data['display_order'] ?? 0,
            $data['has_submenu'] ?? 0,
            $data['badge_text'] ?? null,
            $data['badge_class'] ?? null
        ]);
    }

    public function update($id, $data) {
        $query = "UPDATE {$this->table} SET title = ?, icon = ?, link = ?, display_order = ?, badge_text = ?, badge_class = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([
            $data['title'],
            $data['icon'],
            $data['link'],
            $data['display_order'],
            $data['badge_text'],
            $data['badge_class'],
            $id
        ]);
    }

    public function delete($id) {
        $query = "UPDATE {$this->table} SET status = 0 WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$id]);
    }
}
?>
