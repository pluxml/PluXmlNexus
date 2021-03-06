<div class="content">
    <div class="page">
        <h2><?= $h2 ?></h2>
        <p><a href="<?= $routerService->urlFor('backoffice') ?>">Backoffice</a>&nbsp;/&nbsp;Themes</p>
        <h3><?= $h3 ?></h3>

        <p><a href="<?= $routerService->urlFor('boaddtheme') ?>" class="button blue">Add a theme</a></p>

        <div class="scrollable-table">
            <?php if (!empty($themes)): ?>
                <table>
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Version</th>
                        <th>PluXml</th>
                        <th>Website</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($themes as $key => $theme): ?>
                        <tr>
                            <td><?= $theme['name'] ?></td>
                            <td><?= $theme['description'] ?></td>
                            <td><?= $theme['versionPlugin'] ?></td>
                            <td><?= $theme['versionPluxml'] ?></td>
                            <td><a href="<?= $theme['website'] ?>"><?= $theme['website'] ?></a></td>
                            <td>
                                <a href="<?= $routerService->urlFor('boeditplugin', ['name' => $theme['name']]) ?>">edit</a>&nbsp;
                                <a href="<?= $routerService->urlFor('boeditplugin', ['name' => $theme['name']]) ?>">delete</a>&nbsp;
                                <a href="<?= $theme['link'] ?>">download</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No themes to edit</p>
            <?php endif; ?>
        </div>
    </div>
</div>
