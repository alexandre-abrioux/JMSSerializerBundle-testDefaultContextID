# JMSSerializerBundle-testDefaultContextID

This repository was created with those commands:

```bash
composer create-project symfony/skeleton my_project_name
composer require jms/serializer-bundle
```

; then two services were added:

- `App\Services\SerializationContextFactory`
- `App\Services\TestService`

; and the JMSSerializerBundle config was altered like this:

```yaml
jms_serializer:
    [ ... ]
    default_context:
        serialization:
            id: App\Services\SerializationContextFactory
```

To trigger the error run `bin/console c:c`
