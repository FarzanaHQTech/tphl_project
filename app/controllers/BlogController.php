<?php
class BlogController extends Controller
{
    protected $db;
    protected $blogModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->blogModel = new Blog($this->db);
    }
    public function index()
    {
        $searchTerm = $_GET['q'] ?? '';
        $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $perPage = 10;
        $offset = ($currentPage - 1) * $perPage;

        // Total department count
        $totalDepartments = $this->blogModel->countAll($searchTerm);
        $totalPages = ceil($totalDepartments / $perPage);

        // Get departments
        $blogs = $this->blogModel->getPaginated($perPage, $offset, $searchTerm);

        $this->view("/blogs/blog-lists", [

            "current_route"   => "blog-lists",
            "page_title"      => "blog List",

            "totalPages"      => $totalPages,
            "currentPage"     => $currentPage,
            "searchTerm"      => $searchTerm,
            "blogs"      => $blogs,

        ]);

        // print_r($blogs);
    }

    public function create()
    {

        $this->view("/blogs/create-blog", [
            "current_route"   => "create-blog",
            "page_title"      => "create blog ",
        ]);
    }

    // Handle form submission
    public function store()
    {
        $content = $_POST['content'] ?? '';
        $excerpt = $_POST['excerpt'] ?? '';

     

        $read_time = calculateReadTime(strip_tags($content));

        $data = [
            'title' => $_POST['title'],
            'excerpt' => trim($excerpt),
            'content' => trim($content),
            'author' => $_POST['author'],
            'read_time' => $read_time,
            'published_date' => $_POST['published_date'],
            'status' => (int)($_POST['status'] ?? 0),
        ];

        $photoInputName = 'image';

        try {
            if ($this->blogModel->create($data, $photoInputName)) {
                setSuccess('Blog created successfully');
                header("Location: {$GLOBALS['base_url']}/blog-lists");
                exit;
            }
        } catch (\Throwable $th) {
            setError($th->getMessage());
            header("Location: {$GLOBALS['base_url']}/create-list");
            exit;
        }
    }

    public function edit($id)
    {
        $blog = $this->blogModel->find($id);
        $this->view("/blogs/edit-blog", [
            "current_route" => "edit-blog",
            "page_title"    => "Edit Blog",
            "blog"          => $blog,
        ]);
    }
    public function update($id)
    {
    $content = $_POST['content'] ?? '';
$excerpt = $_POST['excerpt'] ?? '';

// Strip all HTML tags
$content = strip_tags($content);
$excerpt = strip_tags($excerpt);

// Calculate read time from plain content
$read_time = calculateReadTime($content);

$data = [
    'title' => $_POST['title'],
    'excerpt' => trim($excerpt),
    'content' => trim($content),
    'author' => $_POST['author'],
    'read_time' => $read_time,
    'published_date' => $_POST['published_date'],
    'status' => (int)($_POST['status'] ?? 0),
];


        $photoInputName = 'image';

        if ($this->blogModel->update($data, $id, $photoInputName)) {
            setSuccess('Blog updated successfully');
            header("Location: {$GLOBALS['base_url']}/blog-lists");
            exit;
        } else {
            setError('Failed to update blog');
            header("Location: {$GLOBALS['base_url']}/edit-blog/{$id}");
            exit;
        }
    }


    public function show($id)
    {
        $blog = $this->blogModel->find($id);
        $this->view("blogs/blog-details", [
            "current_route" => "blog-details",
            "active" => "show-task",
            "psge_title" => "Show Task",
            "show_breadcrumb" => true,
            "blog" => $blog,
        ]);
    }

    public function delete()
    {
        $id = $_POST['id'] ?? 0;

        if ($id && $this->blogModel->delete($id)) {
            header("Location: {$GLOBALS['base_url']}/departments");
            exit;
        } else {
            echo "<h3 style='color:red'>Failed to delete department</h3>";
        }
    }
}
