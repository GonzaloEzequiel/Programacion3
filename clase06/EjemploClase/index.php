<?php
require_once __DIR__.'/./clases/CdController.php';

$cdController = new CdController();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'listar':
                $cds = $cdController->listarCds();
                echo json_encode($cds);
                break;
            case 'buscarPorId':
                if (isset($_GET['id'])) {
                    $cd = $cdController->buscarCdPorId($_GET['id']);
                    echo json_encode($cd);
                } else {
                    echo json_encode(['error' => 'Falta el parametro id']);
                }
                break;
        }
    } else {
        echo json_encode(['error' => 'Falta el parametro action']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'insertar':
                if (isset($_POST['titulo']) && isset($_POST['cantante']) && isset($_POST['anio'])) {
                    $resultado = $cdController->insertarCd($_POST['titulo'], $_POST['cantante'], $_POST['anio']);
                    echo json_encode(['resultado' => $resultado]);
                } else {
                    echo json_encode(['error' => 'Faltan parámetros']);
                }
                break;
            default:
                echo json_encode(['error' => 'Accion no valida']);
                break;
        }
    } else {
        echo json_encode(['error' => 'Falta el parametro action']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    parse_str(file_get_contents("php://input"), $putData);

    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'modificar':
                if (isset($putData['id']) && isset($putData['titulo']) && isset($putData['cantante']) && isset($putData['anio'])) {
                    $resultado = $cdController->modificarCd($putData['id'], $putData['titulo'], $putData['cantante'], $putData['anio']);
                    echo json_encode(['resultado' => $resultado]);
                } else {
                    echo json_encode(['error' => 'Faltan parametros']);
                }
                break;
            default:
                echo json_encode(['error' => 'Accion no valida']);
                break;
        }
    } else {
        echo json_encode(['error' => 'Falta el parametro action']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {

    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'borrar':
                if (isset($_GET['id'])) {
                    $resultado = $cdController->borrarCd($_GET['id']);
                    echo json_encode(['resultado' => $resultado]);
                } else {
                    echo json_encode(['error' => 'Falta el parametro id']);
                }
                break;
            default:
                echo json_encode(['error' => 'Accion no valida']);
                break;
        }
    } else {
        echo json_encode(['error' => 'Falta el parametro action']);
    }
} else {
    echo json_encode(['error' => 'Metodo HTTP no permitido']);
}
?>