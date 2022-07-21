<?php

namespace ContainerZuFxhY4;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere2883 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7779f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3dc7b = [
        
    ];

    public function getConnection()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getConnection', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getMetadataFactory', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getExpressionBuilder', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'beginTransaction', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getCache', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'transactional', array('func' => $func), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'commit', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->commit();
    }

    public function rollback()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'rollback', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getClassMetadata', array('className' => $className), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'createQuery', array('dql' => $dql), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'createNamedQuery', array('name' => $name), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'createQueryBuilder', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'flush', array('entity' => $entity), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'clear', array('entityName' => $entityName), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->clear($entityName);
    }

    public function close()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'close', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->close();
    }

    public function persist($entity)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'persist', array('entity' => $entity), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'remove', array('entity' => $entity), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'refresh', array('entity' => $entity), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'detach', array('entity' => $entity), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'merge', array('entity' => $entity), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'contains', array('entity' => $entity), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getEventManager', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getConfiguration', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'isOpen', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getUnitOfWork', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getProxyFactory', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'initializeObject', array('obj' => $obj), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'getFilters', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'isFiltersStateClean', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'hasFilters', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return $this->valueHoldere2883->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer7779f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere2883) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere2883 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere2883->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, '__get', ['name' => $name], $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        if (isset(self::$publicProperties3dc7b[$name])) {
            return $this->valueHoldere2883->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2883;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere2883;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2883;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere2883;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, '__isset', array('name' => $name), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2883;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere2883;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, '__unset', array('name' => $name), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere2883;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere2883;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, '__clone', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        $this->valueHoldere2883 = clone $this->valueHoldere2883;
    }

    public function __sleep()
    {
        $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, '__sleep', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;

        return array('valueHoldere2883');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7779f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7779f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7779f && ($this->initializer7779f->__invoke($valueHoldere2883, $this, 'initializeProxy', array(), $this->initializer7779f) || 1) && $this->valueHoldere2883 = $valueHoldere2883;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere2883;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere2883;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
