<form method="get" class="searchform" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="form-group">
        <input type="text" class="field form-control" name="s" id="s" placeholder="<?php esc_attr_e( 'Start typing...', 'findingbeyond' ); ?>">
      </div>
      <input type="submit" class="btn btn-primary" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Go', 'findingbeyond' ); ?>" />
</form>
